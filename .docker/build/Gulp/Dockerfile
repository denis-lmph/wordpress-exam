# Use a Node.js base image
FROM node:14

# Set the working directory inside the container
WORKDIR /app

# Copy package.json and package-lock.json to the working directory
COPY themesrc/package.json themesrc/package-lock.json ./

# Install npm dependencies
RUN npm install

# Install Gulp globally
RUN npm install -g gulp

# Copy the rest of the application code to the working directory
COPY themesrc/ .

# Expose port if needed (e.g., for BrowserSync)
# EXPOSE 3000

# Specify the command to run Gulp
CMD ["gulp"]